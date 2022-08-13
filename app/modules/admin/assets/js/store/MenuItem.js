import {makeAutoObservable} from 'mobx';
import {MenuItemApi} from "../service/api";

class MenuItem {
    constructor({menuId}) {
        this._attributes = {menu_id: menuId};

        makeAutoObservable(this);
    }

    load(data) {
        this.set(data);
    }

    set(attributes) {
        for (let key in attributes) {
            this._attributes[key] = attributes[key];
        }
    }

    get(nameAttribute) {
        return this._attributes[nameAttribute];
    }

    get parentId() {
        return this.get('parentId') ? +this.get('parentId') : 0;
    }

    set parentId(val) {
        this.set({parentId: +val});
    }

    getNameForSelect() {
        if (this.get('depth') === 1) {
            return this.get('name')
        }
        return ' ' + '-'.repeat(this.get('depth')) + ' ' + this.get('name');
    }

    save(cb = () => {}) {
        MenuItemApi.save(this.get('id'), this._attributes).then(res => cb(res));
    }

    delete(cb = () => {}) {
        MenuItemApi.deleteItem(this.get('id')).then(res => cb(res));
    }
}

export default MenuItem;