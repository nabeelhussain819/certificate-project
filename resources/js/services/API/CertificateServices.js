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

function showStudentCertificate(id) {
    return request({
        url: `${baseUrl}/student-detail/${id}`,
    });
}

//generate @todo rename
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
    getTypes,
    showStudentCertificate,
};

export default CertificateService;
