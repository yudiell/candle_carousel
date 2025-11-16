        </div>
        
        <footer>
            <p>&copy; <?php echo date('Y'); ?> Candle Carousel Science Project. Demonstrating thermal energy conversion through convection.</p>
        </footer>
    </main>
    
    <script>
        // Snow falling effect for sidebar - optimized to prevent flickering
        (function() {
            const snowContainer = document.querySelector('.snow-container');
            if (!snowContainer) return;
            
            const snowflakes = [];
            let cleanupInterval;
            
            function createSnowflake() {
                const snowflake = document.createElement('div');
                snowflake.className = 'snowflake';
                snowflake.innerHTML = '❄';
                
                // Random horizontal position within sidebar width
                const sidebarWidth = snowContainer.offsetWidth || 280;
                const randomX = Math.random() * sidebarWidth;
                snowflake.style.left = randomX + 'px';
                
                // Random animation duration (6-10 seconds) - slower fall
                const duration = 6 + Math.random() * 4;
                snowflake.style.animationDuration = duration + 's';
                
                // Random delay
                snowflake.style.animationDelay = Math.random() * 2 + 's';
                
                // Random size (0.8-1.5em) - bigger snowflakes
                const size = 0.8 + Math.random() * 0.7;
                snowflake.style.fontSize = size + 'em';
                
                // Store cleanup time
                const cleanupTime = Date.now() + (duration + 2) * 1000;
                snowflakes.push({ element: snowflake, cleanupTime: cleanupTime });
                
                // Append directly - the container is isolated so it won't cause layout shifts
                snowContainer.appendChild(snowflake);
            }
            
            function cleanupSnowflakes() {
                const now = Date.now();
                for (let i = snowflakes.length - 1; i >= 0; i--) {
                    if (now >= snowflakes[i].cleanupTime) {
                        const element = snowflakes[i].element;
                        if (element && element.parentNode) {
                            element.parentNode.removeChild(element);
                        }
                        snowflakes.splice(i, 1);
                    }
                }
            }
            
            function startSnowfall() {
                // Create initial snowflakes
                for (let i = 0; i < 3; i++) {
                    setTimeout(() => createSnowflake(), i * 600);
                }
                
                // Cleanup old snowflakes periodically
                cleanupInterval = setInterval(cleanupSnowflakes, 1000);
                
                // Continue creating snowflakes every 1200ms (reduced frequency)
                setInterval(() => {
                    createSnowflake();
                }, 1200);
            }
            
            // Start snowfall when page loads
            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', startSnowfall);
            } else {
                startSnowfall();
            }
        })();
    </script>
</body>
</html>

