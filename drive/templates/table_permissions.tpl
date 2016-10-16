<div class="tt_perm" >
<table border='1'><thead><th>Email</th><th></th></thead>
<p>Nombre del archivo : {$nombre}</p>
    {if $masDeCero}
    {foreach from=$permissions item=permission}
        <tr>
            <td>{$permission->emailAddress}</td>
            <td>
                <a class="button" href="unSharedFile.php?permissionId={$permission->getId()}&email={$permission->emailAddress}">Descompartir</a>
            </td>
        </tr>
    {/foreach}
    
    {else}
        <p> Este archivo no fue compartido.</p>
     {/if}   
</table>
</div>
