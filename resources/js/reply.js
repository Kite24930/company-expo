import '/resources/css/detail.css';
import { Tooltip, Toast, Popover } from "bootstrap";
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap-icons/font/bootstrap-icons.css';
import { axios } from "axios";

document.querySelectorAll('.form-select').forEach(e => {
    e.addEventListener('change', statusChange);
})

function statusChange(e) {
    const target = Number(e.getAttribute('data-bs-target'));
    const status = Number(e.target.value);
    const data = URLSearchParams({
        target: target,
        status: status
    })
    axios.patch('/api/contact', data)
        .then(res => {
            console.log(res.data);
            if (res.data.msg === 'ok') {

            } else {

            }
        })
        .catch(err => {
            console.log(err);
        })
}
