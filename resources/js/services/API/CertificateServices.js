// import * as constants from '../Constants'
import request from "../request";

const baseUrl = `/certificate`;

function get(params = {}) {
    return request({
        url: `${baseUrl}`,
        params,
    });
}

function getStudentCertificate(id, data) {
    return request({
        url: `${baseUrl}/student/${id}`,
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

const CertificateService = {
    get,
    getStudentCertificate,
    update,
};

export default CertificateService;
