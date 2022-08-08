import '../scss/common.scss';
import React, {createContext} from "react";
import ReactDOM from "react-dom";
import AppMenu from "./components/AppMenu";
import MenuItemList from "./store/MenuItemList";

window.Admin = {};


export const AppMenuContext = createContext(null);

window.Admin.RunMenuView = ({menuId, idEl}) => {

    const menuList = new MenuItemList({menuId});

    ReactDOM.render(<AppMenuContext.Provider value={{
        menuList,
    }}>
        <AppMenu menuId={menuId} />
    </AppMenuContext.Provider> , document.getElementById(idEl));
}