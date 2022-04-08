// import * as constants from '../Constants'
import request from "../request";

const baseUrl = `/certificate`;

function get(params = {}) {
    return request({
        url: `${baseUrl}`,
        params,
    });
}

function getTypes(params = {}) {
    return request({
        url: `${baseUrl}/get-types`,
        params,
    });
}

function getStudentCertificate(id, data) {
    return request({
        url: `${baseUrl}/student/${id}`,
        data,
        method: "GET",
    });
}

function update(id, data) {
    return request({
        url: `${baseUrl}/${id}`,
        data,
        method: "Patch",
    });
}

const CertificateService = {
    get,
    getStudentCertificate,
    update,
    getTypes,
};

export default CertificateService;
