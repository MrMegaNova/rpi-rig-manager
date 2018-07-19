function proceed () {
    var form = document.createElement('form');
    form.setAttribute('method', 'post');
    form.setAttribute('action', 'http://127.0.0.1/exec.php');
    form.style.display = 'hidden';
    document.body.appendChild(form)
    form.submit();
}



// html onclick="proceed()";