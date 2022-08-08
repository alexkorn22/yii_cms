import qs from 'qs';
import axios from "axios";

const mainParams = {
    baseURL: ``,
    headers: {
        'Content-Type':'application/json',
        "X-Requested-With": "XMLHttpRequest"
    },
    paramsSerializer: function (params) {
        return qs.stringify(params, {arrayFormat: 'brackets'})
    },
};

export const axiosInstance = (baseURL) => {
    const instance = axios.create({
        ...mainParams,
        baseURL,
    });

    instance.save = (id, data, url = 'edit') => {
        const cb = res => new Promise(resolve => resolve(res));

        return id == null ?
            instance.post(url, data).then(cb) :
            instance.put(`${url}?id=${id}`, data).then(cb);
    }

    instance.deleteItem = (id, url = 'delete') => {
        const cb = res => new Promise(resolve => resolve(res));

        return instance.delete(`${url}?id=${id}`).then(cb);
    }

    instance.getByFilter = (filter) => {
        return instance.get('', {
            params: {
                filter
            }
        }).then( res => new Promise(resolve => resolve(res.data)))
    }

    return instance;
}

export const MenuItemApi = axiosInstance('/admin/rest/menu-item');