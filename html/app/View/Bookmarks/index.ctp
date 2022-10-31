<?php
// print_r($data);

echo "<table>";
foreach ($data as $data_item){
    print "<tr>";
    print "<td>" . $data_item['Bookmark']['id'] . "</td>";
    print "<td>" . $data_item['Bookmark']['title'] .  "</td> ";
    print "<td><a>" . $data_item['Bookmark']['url'] . "</a></td>";
    print "<td><a href='bookmarks/view/".$data_item['Bookmark']['id']."' class='' > View</a></td>";
    print "<td><a href='bookmarks/edit/".$data_item['Bookmark']['id']."' class='' > Edit</a></td>";
    print "<td><a href='bookmarks/delete/".$data_item['Bookmark']['id']."' class=''> Delete</a></td>";
    print "</tr>";
}
echo "</table>";