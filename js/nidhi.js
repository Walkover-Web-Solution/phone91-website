
console.log('nidhi');
function myObj(obj)
{
   var routes = (obj && obj.routes) || {};

   $.ajax({
            type: "POST",
            url: routes.file
        });
}

console.log(myObj({ routes: { file: "config.php" } }));
console.log('Nidhi');