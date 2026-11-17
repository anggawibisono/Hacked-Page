
<?php
// Hacked By Red Team
$team = "RED TEAM";
$operation = "CYBERDRILL 2026";
$messages = [
    "Initializing operation...",
    "Access granted.",
    "Target successfully compromised.",
    "Red Team was here."
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hacked By <?= htmlspecialchars($team) ?></title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background: #050505;
    color: #ff003c;
    font-family: "Courier New", monospace;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

body::after {
    content: "";
    position: fixed;
    inset: 0;
    background: repeating-linear-gradient(
        transparent 0px,
        rgba(255,255,255,0.03) 1px,
        transparent 2px,
        transparent 4px
    );
    pointer-events: none;
}

.container {
    text-align: center;
    padding: 30px;
    z-index: 1;
}

.warning {
    font-size: 16px;
    letter-spacing: 8px;
    color: #aaa;
    margin-bottom: 30px;
    animation: blink 1s infinite;
}

h1 {
    font-size: clamp(40px, 9vw, 100px);
    font-weight: bold;
    text-transform: uppercase;
    text-shadow:
        0 0 5px #ff003c,
        0 0 15px #ff003c,
        0 0 35px #ff003c;
    animation: glitch 2s infinite;
}

.subtitle {
    margin-top: 25px;
    font-size: 20px;
    color: #fff;
    letter-spacing: 5px;
}

.line {
    width: 250px;
    height: 2px;
    background: #ff003c;
    margin: 30px auto;
    box-shadow: 0 0 15px #ff003c;
}

.terminal {
    color: #00ff66;
    font-size: 14px;
    line-height: 2;
    text-align: left;
    display: inline-block;
}

.cursor {
    display: inline-block;
    width: 9px;
    height: 17px;
    background: #00ff66;
    animation: blink 0.7s infinite;
}

@keyframes blink {
    50% { opacity: 0; }
}

@keyframes glitch {
    0%, 90%, 100% { transform: translate(0); }
    92% { transform: translate(-4px, 2px); }
    94% { transform: translate(4px, -2px); }
    96% { transform: translate(-2px, 0); }
}

.footer {
    position: fixed;
    bottom: 25px;
    color: #555;
    font-size: 12px;
    letter-spacing: 3px;
}
</style>
</head>

<body>

<div class="container">

    <div class="warning">
        [ SYSTEM COMPROMISED ]
    </div>

    <h1>
        HACKED BY<br>
        <?= htmlspecialchars($team) ?>
    </h1>

    <div class="subtitle">
        YOUR SECURITY HAS BEEN TESTED
    </div>

    <div class="line"></div>

    <div class="terminal">
        <?php foreach ($messages as $message): ?>
            <div>> <?= htmlspecialchars($message) ?></div>
        <?php endforeach; ?>
        <div>> <span class="cursor"></span></div>
    </div>

</div>

<div class="footer">
    <?= htmlspecialchars($operation) ?> | <?= htmlspecialchars($team) ?> OPERATION
</div>

</body>
</html>
