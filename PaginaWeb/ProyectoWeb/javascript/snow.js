    document.addEventListener("DOMContentLoaded", function () {
  const snowContainer = document.getElementById("snow-container");

  function createSnowflake() {
    const snowflake = document.createElement("div");
    snowflake.className = "snowflake";
    snowflake.style.left = `${Math.random() * 100}vw`;
    snowflake.style.animationDuration = `${Math.random() * 6 + 1}s`;

    snowContainer.appendChild(snowflake);

    setTimeout(() => {
      snowflake.remove();
    }, 5000); // Remove snowflake after 3 seconds
  }

  function createSnowfall() {
    setInterval(createSnowflake, 500); // Create a new snowflake every 500 milliseconds
  }

  createSnowfall();
});