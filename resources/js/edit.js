import '/resources/css/index.css';
import { Tooltip, Toast, Popover } from "bootstrap";
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap-icons/font/bootstrap-icons.css';

const editBtn = document.getElementById('editBtn');
const companyName = document.getElementById('companyName');
const companyRuby = document.getElementById('companyRuby');
const companyAddress = document.getElementById('companyAddress');
const establishment = document.getElementById('establishment');
const capital = document.getElementById('capital');
const sales = document.getElementById('sales');
const employees = document.getElementById('employees');
const companyHP = document.getElementById('companyHP');
const category = document.getElementById('category');
const description = document.getElementById('description');
const companyPR = document.getElementById('companyPR');
const schoolmate = document.getElementById('schoolmate');
const recruitType = document.getElementById('recruitType');
const recruitPlannedNumber = document.getElementById('recruitPlannedNumber');
const location = document.getElementById('location');
const target = document.getElementById('target');
const recruitDepartment = document.getElementById('recruitDepartment');
const recruitName = document.getElementById('recruitName');
const recruitRuby = document.getElementById('recruitRuby');
const recruitTel = document.getElementById('recruitTel');
const recruitEmail = document.getElementById('recruitEmail');

editBtn.addEventListener('click', () => {
    let check = true;
    let msg = '';
    if (companyName.value === '') {
        check = false;
        msg += '・企業名を入力してください。\n';
    }
    if (companyRuby.value === '') {
        check = false;
        msg += '・企業名（ふりがな）を入力してください。\n';
    }
    if (companyAddress.value === '') {
        check = false;
        msg += '・本社所在地を入力してください。\n';
    }
    if (establishment.value === '') {
        check = false;
        msg += '・設立年月日が入力されていません。\n'
    }
    if (capital.value === '') {
        check = false;
        msg += '・資本金が入力されていません。\n';
    } else if (capital.value.match(/[^0-9]+/) === null) {
        check = false;
        msg += '・資本金に数字以外が入力されています。\n';
    }
    if (sales.value === '') {
        check = false;
        msg += '・売上高が入力されていません。\n';
    } else if (sales.value.match(/[^0-9]+/) === null) {
        check = false;
        msg += '・売上高に数字以外が入力されています。\n';
    }
    if (employees.value === '') {
        check = false;
        msg += '・従業員数が入力されていません。\n';
    } else if (employees.value.match(/[^0-9]+/) === null) {
        check = false;
        msg += '・従業員数に数字以外が入力されています。\n';
    }
    if (companyHP.value === '') {
        check = false;
        msg += '・会社HP等が入力されていません。\n';
    }
    if (category.value === '') {
        check = false;
        msg += '・業種・業態が入力されていません\n';
    }
    if (description.value === '') {
        check = false;
        msg += '・事業内容が入力されていません。\n';
    }
    if (companyPR.value === '') {
        check = false;
        msg += '・企業PRが入力されていません。\n';
    }
    if (schoolmate.value === '') {
        check = false;
        msg += '・三重大学卒業生入社人数が入力されていません。\n';
    } else if (schoolmate.value.match(/[^0-9]+/) === null) {
        check = false;
        msg += '・三重大学卒業生入社人数に数字以外が入力されています。\n';
    }
    if (recruitType.value === '') {
        check = false;
        msg += '・募集職種が入力されていません。\n';
    }
    if (location.value === '') {
        check = false;
        msg += '・勤務地が入力されていません。\n';
    }
    if (recruitName.value === '') {
        check = false;
        msg += '・採用窓口担当者が入力されていません。\n';
    }
    if (recruitRuby.value === '') {
        check = false;
        msg += '・採用窓口担当者（ふりがな）が入力されていません。\n';
    }
    if (recruitEmail.value === '') {
        check = false;
        msg += '・採用窓口メールアドレスが入力されていません。\n';
    }

    if (check) {
        document.getElementById('companyForm').submit();
    } else {
        window.alert(msg);
    }
})
