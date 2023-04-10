import '/resources/css/contact.css';
import { Tooltip, Toast, Popover } from "bootstrap";
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap-icons/font/bootstrap-icons.css';

const editBtn = document.getElementById('editBtn');
const companyId = document.getElementById('companyId');
const studentNumber = document.getElementById('studentNumber');
const studentDepartment = document.getElementById('studentDepartment');
const studentGrade = document.getElementById('studentGrade');
const studentName = document.getElementById('studentName');
const studentEmail = document.getElementById('studentEmail');
const title = document.getElementById('title');
const detail = document.getElementById('detail');

editBtn.addEventListener('click', () => {
    let check = true;
    let msg = '';
    if (studentNumber.value === '') {
        check = false;
        msg += '・学籍番号を入力してください。\n';
    }
    if (studentDepartment.value === '') {
        check = false;
        msg += '・学部、研究科を入力してください。\n';
    }
    if (studentGrade.value === '') {
        check = false;
        msg += '・学年を入力してください。\n';
    }
    if (studentName.value === '') {
        check = false;
        msg += '・氏名を入力してください。\n';
    }
    if (studentEmail.value === '') {
        check = false;
        msg += '・メールアドレスを入力してください。\n';
    }
    if (title.value === '') {
        check = false;
        msg += '・件名を入力してください。\n';
    }
    if (detail.value === '') {
        check = false;
        msg += '・お問い合わせ内容を入力してください。\n';
    }
    if (check) {
        document.getElementById('contactForm').submit();
    } else {
        window.alert(msg);
    }
})
