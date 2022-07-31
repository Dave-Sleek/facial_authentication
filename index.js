const faceio = new faceIO("fioac689");

enroll.addEventListener("click", async() => {
    let response = await
faceio.enroll({
    locale: "auto",
    payload: {
    email: "enyidavid87@gmail.com",
    pin: "123456"
    },
});
console.log(` Unique Facial ID: ${response.facialId}
Enrollment Date: ${response.timestamp}
Gender: ${response.details.gender}
Age Approximation: ${response.details.age}`);
});

 authenticate.addEventListener("click", async () => {
     let response = await
 faceio.authenticate({
     locale: "auto",
 });
 console.log(`UniqueFacial ID: ${response.facialId}
 PayLoad: ${response.payload}`);
 });