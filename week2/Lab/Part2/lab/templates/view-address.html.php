<?php if ( is_array($addresses) && count($addresses) > 0 ) : ?>
<link rel="stylesheet" href="./templates/bootstrap.min.css">
<h1>Address List</h1>
<table class="table table-striped table-bordered">
<?php foreach( $addresses as $row ) : ?>
    <tr>
        <td><?php echo $row['fullname']; ?> </td>
        <td><?php echo $row['email']; ?> </td>
        <td><?php echo $row['addressline1']; ?> </td>
        <td><?php echo $row['city']; ?> </td>
        <td><?php echo $row['state']; ?> </td>
        <td><?php echo $row['zip']; ?> </td>
        <td><?php echo date("F j, Y",  strtotime($row['birthday'])) ?> </td>
    </tr>
<?php endforeach; ?>
</table>
<?php endif; ?>
