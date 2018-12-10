<!DOCTYPE html>
<html>
<head>
    <title>@yield('titulo','Meu site')</title>
</head>
<body>
   <div style="border:1px sold black;">
        <p>@yield('conteudo')</p>
    </div>
     <ul>
        <li><a href="/home">Página Principal </a></li>
        <li><a href="/contato">Fale com a gente </a></li>
        <li><a href="/sobre">Sobre nós </a></li>
    
    </ul>
    
</body>
</html>
