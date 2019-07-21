 const itemsInCart =  [
     {
        name: "Jolof Rice",
        price: 120,
        qty: 1
    },
    {
        name: "Nyama Choma",
        price: 105,
        qty: 1
    }
];

 const myFunc = (sum, item)=>{
     let quant = item.price * item.qty;
     return sum + quant;
 };

 dam = itemsInCart.reduce(myFunc);

 const countries = [
     {
         code: "US",
         currency: "USD",
         country: 'United States'
     },
     {
         code: "NG",
         currency: "NGN",
         country: 'Nigeria'
     },
     {
         code: 'KE',
         currency: 'KES',
         country: 'Kenya'
     },
     {
         code: 'UG',
         currency: 'UGX',
         country: 'Uganda'
     },
     {
         code: 'RW',
         currency: 'RWF',
         country: 'Rwanda'
     },
     {
         code: 'TZ',
         currency: 'TZS',
         country: 'Tanzania'
     },
     {
         code: 'ZA',
         currency: 'ZAR',
         country: 'South Africa'
     },
     {
         code: 'CM',
         currency: 'XAF',
         country: 'Cameroon'
     },
     {
         code: 'GH',
         currency: 'GHS',
         country: 'Ghana'
     }
 ];

 const formatAsMoney = (amount, buyerCountry)=>{
     let result = countries.find((count) => {
         return count.country = buyerCountry;
     });
     if (country !== null){
         return amount.toLocaleString('en-US', {style: 'currency', currency: country.currency});
     }else {
         return amount.toLocaleString('en-US', {style: 'currency', currency: 'USD'});
     }

 }