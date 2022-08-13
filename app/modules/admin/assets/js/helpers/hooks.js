import {useContext} from "react";
import {AppMenuContext} from "../common";

/**
 * @returns {MenuItemList}
 */
export const useMenuItemList = () => {
    const {menuList} = useContext(AppMenuContext);

    return menuList;
}