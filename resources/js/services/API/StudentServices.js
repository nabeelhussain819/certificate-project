// import * as constants from '../Constants'
import request from "../request";

const baseUrl = `/student`;

function get(params = {}) {
    return request({
        url: `${baseUrl}`,
        params,
    });
}

function create(data) {
    return request({
        url: `${baseUrl}`,
        data,
        method: "POST",
    });
}

function update(id, data) {
    return request({
        url: `${baseUrl}/${id}`,
        data,
        method: "Patch",
    });
}

const StudentServices = {
    get,
    create,
    update,
};

export default StudentServices;
