<? 
function buildPostQuery($data){
    if ($data!="" && is_object($data)){
        $query = 'INSERT INTO '.$this->tableName;
        $rows = ' (';
        $values = ' VALUES (';
        foreach ($data as $row => $value){
            if ($value === end($data)) {
                $rows .= $row.')';
                $values .= '"'.$value.'")';
            } else {
                $rows .= $row.', ';
                $values .= '"'.$value.'", ';
            }
        }
        $query .= $rows.$values;
    }
    return $query;
}