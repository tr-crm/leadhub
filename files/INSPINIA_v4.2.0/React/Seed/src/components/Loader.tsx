import {Spinner} from "react-bootstrap";

type PropsType = {
    height?: string
    width?: string
    overlay?: boolean
}

const Loader = ({height = '100%', width = '100%', overlay = false}: PropsType) => {
    return (
        <div className="position-relative d-flex justify-content-center align-items-center"
             style={{height: height, width: width}}
        >
            <Spinner animation="border" variant="primary" className="position-absolute" style={{zIndex: 2}}/>
            {overlay && <div className="card-overlay" style={{zIndex: 1}}/>}
        </div>
    )
}

export default Loader;