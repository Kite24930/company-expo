import '/resources/css/reply.css';
import { Tooltip, Toast, Popover } from "bootstrap";
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap-icons/font/bootstrap-icons.css';
import axios from "axios";

document.querySelectorAll('.form-select').forEach(e => {
    e.addEventListener('change', statusChange);
    statusClassListChange(e);
})

function statusChange(e) {
    const target = Number(e.target.getAttribute('data-bs-target'));
    const status = Number(e.target.value);
    const data = new URLSearchParams({
        target: target,
        status: status
    })
    axios.patch('/api/contact', data)
        .then(res => {
            console.log(res.data);
            if (res.data.msg === 'ok') {
                statusClassListChange(e.target);
            } else {
                window.alert('対応状況の変更中にエラーが発生しました。');
            }
        })
        .catch(err => {
            console.log(err);
        })
}

function statusClassListChange(e) {
    e.classList.remove('bg-secondary', 'bg-success', 'bg-warning');
    switch (Number(e.value)) {
        case 1:
            e.classList.add('bg-secondary');
            break;
        case 2:
            e.classList.add('bg-warning');
            break;
        case 3:
            e.classList.add('bg-success');
            break;
    }
}
