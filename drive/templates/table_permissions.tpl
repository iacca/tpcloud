<div class="tt_perm" >
<table border='1'><thead><th>Email</th><th></th></thead>
<p>Nombre del archivo : <b>{$nombre}</b></p>
    {if $masDeCero}
    {foreach from=$permissions item=permission}
        <tr>
            <td>{$permission->emailAddress}</td>
            <td height="50">
                <a class="button" style="text-decoration:none" href="unSharedFile.php?permissionId={$permission->getId()}">Descompartir</a>
            </td>
        </tr>
    {/foreach}
    
    {else}
        <p> Este archivo no fue compartido.</p>
     {/if}   
</table>
</div>
