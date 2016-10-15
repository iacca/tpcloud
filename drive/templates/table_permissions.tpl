<table border='1'><thead><th>Email</th><th></th></thead>

<p>Nombre del archivo : {$nombre}</p>
    {if $permissions|@count > 0 }
    {foreach from=$permissions item=permission}
        <tr>
            <td>{$permission->emailAddress}</td>
            <td>
                <a class="button" href='manageFile.php'>Descompartir</a>
            </td>
        </tr>
    {/foreach}
    
    {else}
        <p> Este archivo no fue compartido.</p>
     {/if}   
</table>