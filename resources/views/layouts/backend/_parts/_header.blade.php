<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>@yield("title", "Document")</title>
<style>
    body{
        display: flex;
        flex-direction: column;
        align-items: center;
        height: 100vh;
        padding: 2rem;
    }
    form{
        width: 75%;
        height: 75%;
        display:flex;
        flex-direction:column;
        justify-content: space-evenly;
    }
    .alert{
        outline: 0.1rem solid;
        padding: 1rem;  
        display: flex;
        flex-direction: row-reverse;
        justify-content: space-between;
        align-items: center; 
        width: 75%
    }
    .alert .close{
        border: none;
        background: none;
        font-size: 1.7rem;
    }
    .alert .close:hover{
        color: orangered;
    }
    .alert strong{
        font-weight: 600;
    }
    .alert-success, .alert-success .close{
        outline-color: #198754;
        color: #198754;
    }
    .alert-danger, .alert-danger .close{
        outline-color: #DC3545;
        color: #DC3545;
    }
    .alert-warning, .alert-warning .close{
        outline-color: #FFC107;
        color: #FFC107;
    }
    .alert-info, .alert-info .close{
        outline-color: #0DCAF0;
        color: #0DCAF0;
    }
</style>