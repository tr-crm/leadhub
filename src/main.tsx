import {StrictMode} from 'react'
import {createRoot} from 'react-dom/client'
// import {BrowserRouter} from "react-router";
import { BrowserRouter } from 'react-router-dom' // ✅ Correct import
import App from './App.tsx'
import AppWrapper from "@/components/AppWrapper.tsx";

import "flatpickr/dist/flatpickr.css"
import "simplebar-react/dist/simplebar.min.css"
import "jsvectormap/dist/css/jsvectormap.min.css"
import "@/assets/scss/app.scss"
// import 'bootstrap/dist/css/bootstrap.min.css';


createRoot(document.getElementById('root')!).render(
    <StrictMode>
        <BrowserRouter>
            <AppWrapper>
                <App/>
            </AppWrapper>
        </BrowserRouter>
    </StrictMode>,
)
