<div class="tab_ar" style="overflow-x:auto;">
<table border='1'><thead><th>Nombre Archivo</th><th>Fecha Ultima Modificacion</th><th></th></thead>
    {foreach from=$files item=file}
        <tr>
            <td>{$file->fileName}</td>
            <td>{$file->modifiedDate}</td>
            <td height="50">
                <a class="button" style="text-decoration:none" href='manageFile.php?fileId={$file->fileId}'>Compartir..</a>
                <a class="button" style="text-decoration:none" href='downloadPDF.php?fileId={$file->fileId}'>Descargar en PDF</a>
            </td>
        </tr>
    {/foreach}
</table>
</div> 