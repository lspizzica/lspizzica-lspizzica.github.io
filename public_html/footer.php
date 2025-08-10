<!-- FOOTER -->
<footer class="terminal-footer">
  <div class="footer-content" id="footerPrompt"></div>
</footer>

<!-- STYLE DU FOOTER -->
<style>
  html, body {
    margin: 0;
    padding: 0;
    min-height: 100%;
    display: flex;
    flex-direction: column;
  }

  body {
    flex: 1;
  }

  .terminal-footer {
    background-color: #000;
    color: #33ff33;
    font-family: monospace;
    padding: 20px;
    text-align: center;
    border-top: 2px solid #33ff33;
    width: 100%;
    margin-top: auto;
  }

  .footer-content::after {
    content: "_";
    animation: blink 1s step-start infinite;
    color: #33ff33;
  }

  .copyright {
    margin-top: 10px;
    font-size: 0.9rem;
    color: #33ff33;
  }

  @keyframes blink {
    50% { opacity: 0; }
  }
</style>

<!-- SCRIPT DU FOOTER -->
<script>
  const footerText = "leo@terminal:~$ © 2025 Léo. Tous droits réservés.";
  const footerPrompt = document.getElementById("footerPrompt");
  let j = 0;

  function typeFooter() {
    if (j < footerText.length) {
      footerPrompt.textContent += footerText.charAt(j);
      j++;
      setTimeout(typeFooter, 50);
    }
  }

  typeFooter();

  // Mettre à jour l'année automatiquement
  document.getElementById("year").textContent = new Date().getFullYear();
</script>
