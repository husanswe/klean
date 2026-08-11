<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>404 - Page Not Found</title>
    <style>
        body {
            overflow: hidden;
            margin: 0;
        }
        #back-btn {
            position: fixed;
            top: 20px;
            left: 20px;
            padding: 10px 20px;
            background: #fff;
            color: #000;
            text-decoration: none;
            border-radius: 5px;
            z-index: 10;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
    <a href="{{ route('main') }}" id="back-btn">← Back to Home</a>

    <canvas id="test"></canvas>

    <script>
        let canvas = document.getElementById('test'),
            ctx = canvas.getContext('2d'),
            height,
            width,
            particles;
        const step = 10;

        let init = () => {
            height = window.innerHeight;
            width = window.innerWidth;
            
            canvas.height = height;
            canvas.width = width;
            
            ctx.fillStyle = '#fff';
            ctx.fillRect(0, 0, width, height);
            ctx.fillStyle = '#000';
            
            const fontSize = Math.min(height, width) / 2;
            ctx.font = `${fontSize}px Arial`;
            ctx.textAlign = 'center';
            ctx.fillText('404', width / 2, height / 2 + fontSize / 4);

            const data = ctx.getImageData(0, 0, width, height).data;
            const data32 = new Uint32Array(data.buffer);
            
            particles = [];
            for (let x = 0; x < width; x += step) {
                for (let y = 0; y < height; y += step) {
                    const color = data32[y * width + x];
                    if (color != 0xFFFFFFFF) {
                        particles.push({ x, y });
                    }
                }
            }
        }

        init();
        window.onresize = init;

        let counter = 0;

        function drawIt() {
            ctx.fillStyle = '#1c1c1c';
            ctx.fillRect(0, 0, width, height);

            for (let i = 0; i < particles.length; i++) {
                const dX = (step / 10) * Math.cos(i * 11 + counter),
                      dY = (step / 10) * Math.sin(i * 13 + counter),
                      radius = step * 0.5 + dX - dY;

                ctx.beginPath();
                ctx.arc(
                    particles[i].x + dX,
                    particles[i].y + dY,
                    radius,
                    0, 2 * Math.PI,
                    false
                );

                const color = (counter + 15 * (5 + dX - dY)) % 360;
                ctx.fillStyle = `hsl(${color}, 100%, 50%)`;
                ctx.fill();
            }

            counter += 0.1;
            requestAnimationFrame(drawIt);
        }

        drawIt();
    </script>
</body>
</html>