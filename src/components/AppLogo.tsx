import { Link } from "react-router";

import logo from '@/assets/images/logo.png'
import logoDark from '@/assets/images/logo-black.png'

const AppLogo = () => {
    return (
        <>
            <Link to="/" className="logo-dark">
                <img src={logoDark} alt="dark logo" height="32" />
            </Link>
            <Link to="/" className="logo-light">
                <img src={logo} alt="logo" height="32" />
            </Link>
        </>
    )
}

export default AppLogo