import '/resources/css/index.css';
import { Tooltip, Toast, Popover } from "bootstrap";
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap-icons/font/bootstrap-icons.css';
import { app, analytics } from "./module/firebase";

document.getElementById('firstSectionMove').addEventListener('click', () => {
    document.getElementById('firstSection').scrollIntoView({
        behavior: 'smooth',
        block: 'start',
    })
})

document.getElementById('secondSectionMove').addEventListener('click', () => {
    document.getElementById('secondSection').scrollIntoView({
        behavior: 'smooth',
        block: 'start',
    })
})
