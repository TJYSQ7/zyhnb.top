//注册数据检验
function registerCheck() {
    let name = document.getElementsByName('name')[0].value.trim();
    let pw = document.getElementsByName('pw')[0].value.trim();
    let cpw = document.getElementsByName('cpw')[0].value.trim();
    let phone = document.getElementsByName('phone')[0].value.trim();
    // 检验用户名
    let nameReg = /^[\u4e00-\u9fa5]{2,8}$/;
    if (!nameReg.test(name)) {
        alert('用户名必须填写,且只能由2-8个汉字组成');
        return false;
    }
    // 检验密码
    let pwReg = /^[a-zA-Z]\w{5,17}$/;
    if (!pwReg.test(pw)) {
        alert('密码必须填写，且只能由大小写字符和数字构成，长度为6到10个字符');
        return false;
    }
    if (pw !== cpw) {
        alert('两次输入的密码不一致');
        return false;
    }
    // 检验手机号
    let phoneReg = /^(13[0-9]|14[01456879]|15[0-35-9]|16[2567]|17[0-8]|18[0-9]|19[0-35-9])\d{8}$/;
    if (!phoneReg.test(phone)) {
        alert('请输入正确的手机号');
        return false;
    }
    return true;
}
//登录数据检验
function loginCheck() {
    let phone = document.getElementsByName('phone')[0].value.trim();
    let pw = document.getElementsByName('pw')[0].value.trim();
    // 检验手机号
    let phoneReg = /^(13[0-9]|14[01456879]|15[0-35-9]|16[2567]|17[0-8]|18[0-9]|19[0-35-9])\d{8}$/;
    if (!phoneReg.test(phone)) {
        alert('请输入正确的手机号');
        return false;
    }
    // 检验密码
    let pwReg = /^[a-zA-Z]\w{5,17}$/;
    if (!pwReg.test(pw)) {
        alert('密码必须填写，且只能由大小写字符和数字构成，长度为6到10个字符');
        return false;
    }
    return true;
}
//文章数据检验
function articleCheck() {
    let title = document.getElementsByName('title')[0].value.trim();
    let content = document.getElementsByName('content')[0].value.trim();
    if (!title || !content) {
        alert('标题和内容不能为空');
        return false;
    }
    return true;
}

