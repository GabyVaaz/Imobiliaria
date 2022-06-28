<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Lista Imóvel</title>
   <style>
     td{
        color: black;
     }
     th{
        color: black;
     }
     h1{
        color: black;
     }
     main{
        padding: 10px;
        margin: 10px;
     }

    </style>
</head>
<body>
   
</body>
</html>
<h1>Imovel</h1>
<hr>
<div>
   <table style="top:50px;">
   <thead>
      <tr>
         <th>Descricao</th> 
         
         <th>Valor</th>
         
         <th>Tipo</th>
       
         
      </tr>  
    </thead>
    <tbody>
       <?php
       require_once 'controller/ImovelController.php';
       $imovel = call_user_func(array('ImovelController','listar'));
       if(isset($imovel)){
           foreach ($imovel as $imovel){
               ?>
               <tr>
                  <td ><?php echo $imovel->getDescricao(); ?></td>
                  <td><?php echo $imovel->getValor(); ?></td>
                  <td><?php echo $imovel->getTipo(); ?></td>
                  <td>
                        <a style="background-color: #5eb1bf; color: black; padding: 20px 30px;  display: inline-block;" href="index.php?page=imovel&action=editar&id=<?php echo $imovel->getId();?>">Editar</a>
                        <a style="background-color: #001233; color: white; padding: 20px 30px;  display: inline-block;" href="index.php?page=imovel&action=excluir&id=<?php echo $imovel->getId();?>">Excluir</a>
<br>
                        <th><a style="background-color: #00c49a; color: white; padding: 20px 30px;  display: inline-block;" href="Index.php?page=imovel">Novo</th>
                  </td>
               </tr>
               <?php

           }
       } else{
           ?>
           <tr>
             <td colspan="5">Nenhum registro encontrado</td>
           </tr>
           <?php
       }
       ?>
       </tbody>
       </table>
       </div>
       