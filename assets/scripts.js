document.addEventListener("click", function () {
    if (document.getElementById("snackbar") != null)
        document.getElementById("snackbar").style.visibility = "hidden";
}); 

if (document.getElementById("btnPasswordClear") != null)
    document.getElementById("btnPasswordClear").addEventListener("click", function () {
        var element = document.getElementById("password");
        if (element != null)
            element.value = "";
    });

if (document.getElementById("btnUsernameClear") != null)
    document.getElementById("btnUsernameClear").addEventListener("click", function () {
        var element = document.getElementById("username");
        if (element != null)
            element.value = "";
    });

if (document.getElementById("btnCompanyIdClear") != null)
    document.getElementById("btnCompanyIdClear").addEventListener("click", function() {
        var element = document.getElementById("companyId");
        if (element != null)
            element.value = "";
    });

if (document.getElementById("btnEmailClear") != null)
    document.getElementById("btnEmailClear").addEventListener("click", function () {
        var element = document.getElementById("email");
        if (element != null)
            element.value = "";
    });

if (document.getElementById("username") != null && document.getElementById("password") != null)
    window.addEventListener("load", function () {
        if (document.getElementById("username").value.length > 0)
            document.getElementById("password").focus();
    });

if (document.getElementById("btnSubmit")) {
    window.addEventListener("keypress", function(e) {
        if (e.keyCode === 13) {
            e.preventDefault();
            document.getElementById("btnSubmit").click();
        }
    });
}