import React, {useEffect, useState} from 'react';
import {useMenuItemList} from "../../helpers/hooks";
import {observer} from "mobx-react-lite";
import MenuItemTree from "../MenuItemTree";
import EditMenuItemModal from "./EditMenuItemModal";
import MenuItem from "../../store/MenuItem";

const AppMenu = ({menuId}) => {
    const [show, setShow] = useState(false);
    const menuList = useMenuItemList();

    useEffect(() => {
        menuList.fetch(menuId);
    },[])


    return <div>
        <div>
            <button className={'btn btn-success'} onClick={() => setShow(true)}>Добавить</button>
            <EditMenuItemModal
                item={new MenuItem({menuId})}
                items={menuList}
                show={show}
                handleClose={() => setShow(false)}
                handleSave={async item => {
                    item.save(() => menuList.fetch(menuId));
                    setShow(false);
                }}
            />
        </div>
        <div className={'mt-2'}>
            <MenuItemTree />
        </div>
    </div>;
};

export default AppMenu;