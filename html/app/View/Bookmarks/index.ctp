<?php

//echo "<table>";
//foreach ($data as $data_item){
//    print "<tr>";
//    print "<td>" . $data_item['Bookmark']['id'] . "</td>";
//    print "<td>" . $data_item['Bookmark']['title'] .  "</td> ";
//    print "<td><a>" . $data_item['Bookmark']['url'] . "</a></td>";
//    print "<td><a href='bookmarks/view/".$data_item['Bookmark']['id']."' class='' > View</a></td>";
//    print "<td><a href='bookmarks/edit/".$data_item['Bookmark']['id']."' class='' > Edit</a></td>";
//    print "<td><a href='bookmarks/delete/".$data_item['Bookmark']['id']."' class=''> Delete</a></td>";
//    print "</tr>";
//}
//echo "</table>";
?>
<h1>Bookmarks</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Url</th>
        <th></th>
        <th></th>
    </tr>
    <?php foreach ($bookmarks as $bookmark): ?>
        <tr>
            <td><?php echo $bookmark['Bookmark']['id']; ?></td>
            <td>
                <?php echo $this->Html->link($bookmark['Bookmark']['title'],
                    array('controller' => 'bookmarks', 'action' => 'view', $bookmark['Bookmark']['id'])); ?>
            </td>
            <td><?php echo $bookmark['Bookmark']['url']; ?></td>
            <td>
                <?php
                echo $this->Html->link(
                    'Edit',
                    array('action' => 'edit', $bookmark['Bookmark']['id'])
                );
                ?>
            </td>
            <td>
                <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $bookmark['Bookmark']['id']),
                    array('confirm' => 'Are you sure?')
                );
                ?>
            </td>
        </tr>
    <?php endforeach; ?>
    <?php unset($bookmark); ?>
</table>

<?php echo $this->Html->link(
    'Add Bookmark',
    array('controller' => 'bookmarks', 'action' => 'add')
); ?>