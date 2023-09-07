<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tous les articles</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <h1>My Blog</h1>

    <input type="text" name="search" id="search" onkeyup="updateQuery()">
    <div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">nom article</th>
                    <th scope="col">contenu article</th>
                </tr>
            </thead>
            <tbody id="table_tbody">

            </tbody>
        </table>
        <template id="row_table_template">
            <tr scope="row">
                <td></td>
                <td><a href="article.php?id_article=XX_ARTICLE_ID_XX"></a></td>
                <td></td>
            </tr>
        </template>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            updateQuery();
        });


        function updateQuery(){
            let xhr = new XMLHttpRequest();
            // console.log(xhr);
            let searchValue = document.getElementById("search").value;
            xhr.open("GET", "articles_ajax.php?search="+searchValue);
            xhr.responseType = "json";
            xhr.send();
            xhr.onload = function() {
                document.getElementById("table_tbody").innerHTML = "";
                const tbody = document.querySelector("tbody");
                const template = document.querySelector("#row_table_template");

                // alert(xhr.status);
                // console.log(xhr);
                console.log(xhr.response);

                for(let i=0; i<xhr.response.length; i++) {
                    const clone = template.content.cloneNode(true);
                    let td = clone.querySelectorAll("td");
                    let link = clone.querySelectorAll("a");
                    td[0].textContent = xhr.response[i]['id_article'];
                    td[1].textContent = xhr.response[i]['nom_article'];
                    td[2].textContent = xhr.response[i]['contenu_article'];
                    link[0].attributes['href'] = "article.php?id_article="+ xhr.response[i]['id_article'];
                    tbody.appendChild(clone);

                    // console.log(link[0].attributes);
                }
            }
            xhr.onerror = function() {
                console.log(xhr);
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>