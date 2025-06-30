import AppMenu from "@/layouts/components/navbar/components/AppMenu";

const Navbar = () => {
    return (
        <header className="topnav">
            <nav className="navbar navbar-expand-lg">
                <nav className="container-fluid">
                    <AppMenu/>
                </nav>
            </nav>
        </header>
    )
}

export default Navbar