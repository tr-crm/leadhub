'use client'
import {Fragment, useEffect, useState} from "react";
import VerticalLayout from "@/layouts/VerticalLayout";
import HorizontalLayout from "@/layouts/HorizontalLayout";
import {useLayoutContext} from "@/context/useLayoutContext";
import {ChildrenType} from "@/types";
import Loader from "@/components/Loader";

const MainLayout = ({children}: ChildrenType) => {

    const {orientation} = useLayoutContext();

    const [hasMounted, setHasMounted] = useState(false);

    useEffect(() => {
        setHasMounted(true);
    }, []);

    if (!hasMounted) return <Loader height="100vh"/>;

    return (
        <Fragment>
            {orientation === 'vertical' && <VerticalLayout>{children}</VerticalLayout>}
            {orientation === 'horizontal' && <HorizontalLayout>{children}</HorizontalLayout>}
        </Fragment>
    )
}

export default MainLayout