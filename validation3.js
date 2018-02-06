window.onload = function() {
            
            var tombol = document.getElementById('myButton');
            console.log(tombol);
            
            tombol.addEventListener('click', function (e) {
                console.log('tombol clicked');
                e.preventDefault();
                this.disabled = true;
                setTimeout(function(e) {
                    location.reload();
                }, 3000)
            }, true);

        }