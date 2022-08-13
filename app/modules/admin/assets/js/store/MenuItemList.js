import {makeAutoObservable} from 'mobx';
import MenuItem from "./MenuItem";
import axios from "axios";
import {MenuItemApi} from "../service/api";

class MenuItemList {
    constructor({menuId}) {
        this._items = [];
        makeAutoObservable(this);
        this.menuId = menuId;
    }

    get items() {
        return this._items;
    }

    add(data) {
        const item = new MenuItem({menuId: data.menu_id});
        item.load(data);
        this._items.push(item);
    }

    setItems(data) {
        this._items = [];
        data.forEach(item => this.add(item));
    }

    getViewItems() {
        return this.items.filter(item => item.get('depth') !== 0);
    }

    async fetch(menuId) {
        const {data} = await MenuItemApi.get('get-list', {params: {menuId}});
        this.setItems(data);

        return this;
    }
}

export default MenuItemList;