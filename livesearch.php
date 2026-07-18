<script>
    $(function() {
        function displayResult(item) {
            $('.alert').show().html('You selected <strong>' + item.value + '</strong>: <strong>' + item.text + '</strong>');
        }

        $('.live-search').typeahead({
            source: <?php
                    $con = new mysqli("fms.candfsystems.com", "fms_web_cfdev", "Br2*a7b+!roVAR", "fms_db");

                    $result = $con->query("SELECT DISTINCT place_string FROM places");
                    while ($row = $result->fetch_object()) {
                        $user_arr2[] = $row->place_string;
                    }
                    $result->close();
                    echo json_encode($user_arr2);
                    ?>,
            scrollBar: true,
            onSelect: displayResult
        });
    });
</script>

