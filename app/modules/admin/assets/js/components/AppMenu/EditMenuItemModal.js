import React from 'react';
import {Modal, Button} from "react-bootstrap";
import {observer} from "mobx-react-lite";

/**
 * @param {MenuItemList} items
 * @param {MenuItem} item
 * @param show
 * @param handleClose
 * @param handleSave
 * @returns {JSX.Element}
 * @constructor
 */
const EditMenuItemModal = ({items, item, show, handleClose, handleSave}) => {
    const save = () => {
        handleSave(item);
    }

    return <Modal
        show={show}
        onHide={handleClose}
    >
        <Modal.Header closeButton>
            <Modal.Title>{!!item.get('id') ? 'Изменить ' + item.get('name') : 'Создать'}</Modal.Title>
        </Modal.Header>
        <Modal.Body>
            <div className="form-group">
                <label>Родительский элемент</label>
                <select
                    className="form-control"
                    onChange={e => item.parentId = e.target.value}
                    value={item.parentId}
                >
                    <option value={0}></option>
                    {items.getViewItems().map(object => <option
                        key={object.get('id')}
                        value={object.get('id')}
                    >
                        {object.getNameForSelect()}
                    </option>)}
                </select>
            </div>
            <div className="form-group">
                <label htmlFor={'nameInputNew'}>Наименование</label>
                <input
                    type={'text'}
                    className={'form-control'}
                    id={'nameInputNew'}
                    defaultValue={item.get('name') }
                    onChange={e => item.set({name: e.target.value})}
                />
            </div>
            <div className="form-group">
                <label htmlFor={'urlInputNew'}>Ссылка</label>
                <input
                    type={'text'}
                    className={'form-control'}
                    id={'urlInputNew'}
                    defaultValue={item.get('url')}
                    onChange={e => item.set({url: e.target.value})}
                />
            </div>
        </Modal.Body>
        <Modal.Footer>
            <Button variant="secondary" onClick={handleClose}>
                Отменить
            </Button>
            <Button variant="primary" onClick={save}>
                Сохранить
            </Button>
        </Modal.Footer>
    </Modal>;
};

EditMenuItemModal.defaultProps = {
    show: false,
    handleClose: () => {},
    handleSave: () => {},
}

export default observer(EditMenuItemModal);