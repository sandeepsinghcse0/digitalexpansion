// function callApiPost(url, postedData, callback) {
//     const xhr = new XMLHttpRequest()
//     xhr.open('POST', url);
//     xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
//     xhr.send(new FormData(postedData));
//     xhr.onload = function ({ target: result }) {
//         const response = JSON.parse(result.response);
//         if (xhr.status === 200) {
//             callback(response, null);
//         } else
//             callback(null, response.message);
//     };
// }
const baseURL = document.querySelector("meta[name='baseURL']").getAttribute("value") || "";
function httpRequest(url, method, postedData, contentType, callback) {
    const xhr = new XMLHttpRequest();
    if (method.toUpperCase() === "POST" || method.toUpperCase() === "PUT") {
        xhr.open(method.toUpperCase(), url);
        switch (contentType) {
            case 'urlencoded':
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.send(postedData);
                break;
            case 'json':
                xhr.setRequestHeader('Content-Type', 'application/json');
                xhr.send(JSON.stringify(postedData));
                break;
            case 'formdata':
                xhr.send(new FormData(postedData));
                break;
            case 'text':
                xhr.setRequestHeader('Content-Type', 'text/html; charset=utf-8;');
                xhr.send(postedData);
                break;
            default:
                xhr.send(postedData);
        }
    } else {
        xhr.open(method.toUpperCase(), url, true);
        xhr.send();
    }
    xhr.onload = function ({ target: result }) {
        const response = JSON.parse(result.response);
        if (xhr.status === 200) {
            callback(response, null);
        } else
            callback(null, response.message);
    };
}
function _viewContent(structure, data, selector = null) {
    const colClass = {
        1: 'col-sm-12',
        2: 'col-sm-6',
        3: 'col-sm-4',
        4: 'col-sm-3'
    }
    if (selector) document.querySelector(selector).replaceChildren();
    const parentNode = selector ? document.querySelector(selector) : document.createElement("div");
    structure.map(row => {
        const rowNode = document.createElement("div");
        rowNode.className = "row";
        row.forEach(col => {
            let [name, title = "", type = 'default'] = col.split("|");
            if (!title) title = name;
            title = title.replaceAll("_", " ");
            title = `${title.charAt(0).toUpperCase()}${title.substr(1).toLowerCase()}`;
            const colNode = document.createElement("div");
            colNode.className = colClass[row.length];
            const groupNode = document.createElement("div");
            groupNode.className = "form-group";
            let labelNode = null, valueNode = null;
            if (title !== 'None') {
                labelNode = document.createElement("label");
                labelNode.innerHTML = title;
            }
            if (type === 'image') {
                valueNode = document.createElement("img");
                valueNode.src = data[name];
                valueNode.width = 50;
            } else {
                valueNode = document.createElement("p");
                valueNode.innerHTML = data[name] || 'N/A';
            }
            if (title !== 'None') {
                groupNode.append(labelNode);
            }
            groupNode.append(valueNode);
            colNode.append(groupNode);
            rowNode.append(colNode);
        });
        parentNode.append(rowNode);
    });
    return !selector ? parentNode : null;
}
function _handleFormValidate(formId, returnType, callback) {
    if (!!document.forms[formId]) {
        if (document.querySelector(`.form-message`)) {
            document.querySelector(`.form-message`).innerHTML = "";
        }
        const formNode = document.forms[formId];
        const fieldRule = {}, fields = {};
        for (let index = 0; index < formNode.length; index++) {
            const element = formNode[index];
            const { className, dataset, title, name, value, checked = false, files = null } = element;
            const isRequired = !!className && !!className.includes("required");
            const { inputType: type, minlength = 0 } = dataset;
            if (!!name) {
                fieldRule[name] = { title, type, minlength, isRequired };
                fields[name] = value;
                if (type === 'boolean') {
                    fields[name] = !!value && checked ? value : checked;
                }
                if (element.type === 'file') {
                    fields[name] = files || null;
                }
                if (!!type || isRequired || minlength) {
                    _validationMessage({ type, isRequired, isError: true, minlength }, element);
                    let event = "keyup";
                    if (!!["select-multiple", "select-one", "file", "checkbox"].includes(element.type)) {
                        event = "change";
                    }
                    if (type === "date") {
                        event = "focus";
                    }
                    element.addEventListener(event, function () {
                        _validationMessage({ type, isRequired, isError: true, minlength }, this);
                    });
                }
            }
        }
        if (_doValidate(fields, fieldRule)) {
            return false;
        } else {
            return callback(returnType === 'formdata' ? formNode : fields);
        }
    }
}
const emailRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
const contactNumberRegex = /^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$/;
function _validationMessage({ type = 'default', isRequired, minlength, regex }, inputNode) {
    let { value, title, checked = false, parentNode } = inputNode;
    let errorMessage = '';
    const basicValid = () => {
        if (!!isRequired && (value === '' || value === null)) {
            errorMessage = `Please enter the value for ${title}`;
            return true;
        } else if (!!value && !!regex && regex.test(value)) {
            errorMessage = `Please enter a valid ${title}`;
            return true;
        } else if (!!value && !!minlength && value.length < minlength) {
            errorMessage = `Please enter at least ${minlength} chars for ${title}`;
            return true;
        } else
            return false;
    }
    switch (type) {
        case 'boolean':
            if (!!isRequired && !value)
                errorMessage = `Please select the value for ${title}`;
            break;
        case 'file':
            if (!!isRequired && (!value || (!!value && value.length === 0)))
                errorMessage = `Please select the file`;
            break;
        case 'email':
            if (!basicValid() && !!value && !emailRegex.test(String(value).toLowerCase()))
                errorMessage = `Please enter a valid Email`;
            break;
        case 'contactNumber':
            if (!basicValid() && !!value && value.length !== 10)
                errorMessage = `Please enter a valid Number`;
            break;
        default:
            basicValid();
    }
    const messageNode = document.createElement("p");
    if (parentNode.className.includes("input-group")) {
        parentNode = parentNode.parentNode;
    }
    if (!!parentNode.querySelector('.input-message')) {
        parentNode.querySelector('.input-message').remove();
    }
    if (!!errorMessage) {
        messageNode.className = "input-message error";
        messageNode.innerHTML = `--${errorMessage}`;
        parentNode.appendChild(messageNode);
    }
}
function _doValidate(field, fieldRule) {
    let errorCount = 0;
    if (!!field && Object.keys(field).length !== 0 && !!fieldRule && Object.keys(fieldRule).length !== 0) {
        Object.keys(fieldRule).forEach(fieldName => {
            let isError = false;
            const fieldValue = field[fieldName];
            const { type = 'default', isRequired, minlength, regex } = fieldRule[fieldName];
            const basicValid = () => {
                if (!!isRequired && (fieldValue === '' || fieldValue === null))
                    return true;
                else if (!!fieldValue && !!regex && regex.test(fieldValue))
                    return true;
                else if (!!fieldValue && !!minlength && fieldValue.length < minlength)
                    return true;
                else
                    return false;
            }
            switch (type) {
                case 'boolean':
                    if (!!isRequired)
                        isError = !fieldValue;
                    break;
                case 'file':
                    if (!!isRequired)
                        isError = !fieldValue || (!!fieldValue && fieldValue.length === 0);
                    break;
                case 'email':
                    if (basicValid())
                        isError = true;
                    else if (!!fieldValue && !emailRegex.test(String(fieldValue).toLowerCase()))
                        isError = true;
                    break;
                case 'contactNumber':
                    if (basicValid())
                        isError = true;
                    else if (!!fieldValue && fieldValue.length !== 10)
                        isError = true;
                    break;
                default:
                    isError = basicValid();
            }
            if (isError) errorCount++;
        })
    }
    return errorCount > 0;
}