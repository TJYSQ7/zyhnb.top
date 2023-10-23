function check() {
    let name = document.getElementsByName('name')[0].value.trim();
    let pw = document.getElementsByName('pw')[0].value.trim();
    let cpw = document.getElementsByName('cpw')[0].value.trim();
    let email = document.getElementsByName('email')[0].value.trim();
    // 检验用户名
    let nameReg = /^[a-zA-Z0-9]{3,10}$/;
    if (!nameReg.test(name)) {
        alert('用户名必须填写,且只能由大小写字符和数字构成,长度为3到10个字符');
        return false;
    }
    // 检验密码
    let pwReg = /^[a-zA-Z0-9]{6,10}$/;
    if (!pwReg.test(pw)) {
        alert('密码必须填写，且只能由大小写字符和数字构成，长度为6到10个字符');
        return false;
    }
    if (pw !== cpw) {
        alert('两次输入的密码不一致');
        return false;
    }
    // 检验邮箱
    let emailReg = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!emailReg.test(email)) {
        alert('请输入正确的邮箱地址');
        return false;
    }
    return true;
}