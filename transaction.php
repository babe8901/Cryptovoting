<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Type</th>
            <th scope="col">Time</th>
            <th scope="col">Message</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach ($rows as $row) {
        ?>
            <tr>
            <th scope="row"><?=$row['id']?></th>
            <td><?=$row['type']?></td>
            <td><?=$row['time']?></td>
            <td><?=$row['message']?></td>
            </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
</div>
