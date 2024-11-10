<style>
    .banner-container {
        background-image: url('https://images.unsplash.com/photo-1682888813726-24adc990e6f7?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
        color: white;
        background-size: cover;
        background-position: center;
        width: 100%;
        height: 50vh; /* Adjust height as needed */
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .uk-background-muted {
        background-color: rgba(87, 70, 57, 0.7); /* Adjust transparency to desired effect */
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }
    
    .banner-content {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr; /* 4 equal columns */
        gap: 20px; /* Space between elements */
        width: 100%;
        max-width: 1200px; /* Limit content width */
        align-items: center;
        text-align: center;
    }
    
    .banner-content-left h2 {
        font-size: 3rem;
        margin: 0;
        color: #FFF;
    }
    
    .bn2-desc {
        font-size: 0.8rem;
        font-weight: 100;
        line-height: 1.5;
        color: #FFF;
        grid-column: span 2; /* Span 2 columns on larger screens */
    }
    
    .banner-content-right p {
        margin: 0;
        font-size: 1.25rem;
        text-align: right;
    }
    
    .banner-content-right .uk-heading-small {
        font-size: 1.5rem;
        color: #FFF;
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
        .banner-content {
            grid-template-columns: 1fr; /* Stack all items in a single column on smaller screens */
            text-align: center;
        }
        
        .bn2-desc {
            grid-column: span 1; /* Revert to single column span */
        }
    }
    </style>
    
    
    <div class="banner-container">
        <div class="uk-background-muted">
            <div class="banner-content">
                <div class="banner-content-left">
                    <h2 class="uk-heading-medium uk-text-bold">SOLUCIONES INTEGRALES</h2>
                </div>
                <p class="bn2-desc">
                    “Nos dedicamos a construir el espacio de tus sueños con dedicación y excelencia. ¡Hacemos realidad tus anhelos, transformando tus ideas en el lugar perfecto para ti!”
                </p> 
                <div class="banner-content-right">
                    <p class="uk-text-bold">¡Llama ahora!</p>
                    <p class="uk-heading-small">
                        +52 558 903 4789
                    </p>
                </div>
            </div>
        </div>
    </div>
    