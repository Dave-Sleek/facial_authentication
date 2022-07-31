authenticate.addEventListener("click", async () => {
    let response = await
faceio.authenticate({
    locale: "auto",
});

console.log(`UniqueFacial ID: ${response.facialId}
PayLoad: ${response.payload}`);
});