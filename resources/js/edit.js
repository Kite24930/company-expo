import '/resources/css/index.css';
import { Tooltip, Toast, Popover } from "bootstrap";
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap-icons/font/bootstrap-icons.css';
import axios from "axios";

const editBtn = document.getElementById('editBtn');
const companyId = document.getElementById('companyId');
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
    }
    if (sales.value === '') {
        check = false;
        msg += '・売上高が入力されていません。\n';
    }
    if (employees.value === '') {
        check = false;
        msg += '・従業員数が入力されていません。\n';
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
        // document.getElementById('companyForm').submit();
        const sendData = new URLSearchParams({
            'companyId': companyId.value,
            'companyName': companyName.value,
            'companyRuby': companyRuby.value,
            'companyAddress': companyAddress.value,
            'establishment': establishment.value,
            'capital': capital.value,
            'sales': sales.value,
            'employees': employees.value,
            'companyHP': companyHP.value,
            'category': category.value,
            'description': description.value,
            'companyPR': companyPR.value,
            'schoolmate': schoolmate.value,
            'recruitType': recruitType.value,
            'recruitPlannedNumber': recruitPlannedNumber.value,
            'location': location.value,
            'target': target.value,
            'recruitDepartment': recruitDepartment.value,
            'recruitName': recruitName.value,
            'recruitRuby': recruitRuby.value,
            'recruitTel': recruitTel.value,
            'recruitEmail': recruitEmail.value
        })
        axios.post('/api/company', sendData)
            .then(res => {
                console.log(res.data);
            })
    } else {
        window.alert(msg);
    }
})
