function mycountchar(x, y) {
    var count = 0;
     for (i = 0; i < x.length; i++) {
        if (x[i] == y) {
            count++;
        }
   }
   console.log(count);
 }
 mycountchar("Didin nur yahya",'a');
