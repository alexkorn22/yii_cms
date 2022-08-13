import React, {useState} from 'react';
import {useMenuItemList} from "../../helpers/hooks";
import {observer} from "mobx-react-lite";
import MenuItem from "../../store/MenuItem";
import EditMenuItemModal from "../AppMenu/EditMenuItemModal";

const Item = ({item, onEdit, onDelete}) => {
    const [visibleEditBtn, setVisibleEditBtn] = useState(false);
    const style = {
        minHeight: '31px',
        marginTop: '10px',
        paddingLeft: item.get('depth') === 1 ? '5px' : (20 * item.get('depth')) + 'px',
    }
    return <div
        style={style}
        onMouseEnter={() => setVisibleEditBtn(true)}
        onMouseLeave={() => setVisibleEditBtn(false)}
    >
        {item.get('name')}
        {visibleEditBtn && <span style={{marginLeft: '10px'}}>
            <button className={'btn btn-primary btn-sm'} onClick={onEdit}>
                <i className={'fas fa-edit'} />
            </button>
            <button className={'btn btn-danger btn-sm ml-1'} onClick={onDelete}>
                <i className={'fas fa-trash-alt'} />
            </button>
        </span>}
    </div>
}

const MenuItemTree = () => {
    const menuList = useMenuItemList();
    const [showModal, setShowModal] = useState(false);
    const [item, setItem] = useState(menuList.items[0]);
    const menuId = menuList.menuId;
    const items = menuList.getViewItems().map(item => <Item
        key={item.get('id')}
        item={item}
        setShowModal={setShowModal}
        onEdit={() => {
            setItem(item);
            setShowModal(true);
        }}
        onDelete={() => {
            item.delete(() => menuList.fetch(menuId));
        }}
    />);

    return (
        <div>
            {items}
            {item && <EditMenuItemModal
                item={item}
                items={menuList}
                show={showModal}
                handleClose={() => setShowModal(false)}
                handleSave={async item => {
                    item.save(() => menuList.fetch(menuId));
                    setShowModal(false);
                }}
            />}
        </div>
    );
};

export default observer(MenuItemTree);