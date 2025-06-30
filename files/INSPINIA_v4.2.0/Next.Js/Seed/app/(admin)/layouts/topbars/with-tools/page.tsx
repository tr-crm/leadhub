"use client"
import {Button, Container} from "react-bootstrap";
import {TbCircleDashedPlus, TbActivityHeartbeat, TbCalendar} from "react-icons/tb";
import Flatpickr from "react-flatpickr";

const Page = () => {

    return (
        <Container fluid>
            <div className="page-title-head py-2 d-flex align-items-sm-center flex-sm-row flex-column">
                <div className="flex-grow-1">
                    <h4 className="fs-sm text-uppercase fw-bold mb-1">Hey Damian,</h4>
                    <p className="text-muted mb-0 fs-xs">You have 42 messages and 6 notifications.</p>
                </div>
                <div className="d-flex">
                    <div className="input-group">
                        <Flatpickr className="form-control"
                                   options={{
                                       mode: "range",
                                       dateFormat: "d M, Y",
                                       defaultDate: "01 Jan 2025 to 31 Jan 2025"
                                   }}
                                   style={{minWidth: '200px'}}
                        />
                        <div className="input-group-text text-bg-primary border-primary btn-icon">
                            <TbCalendar className="fs-lg"/>
                        </div>
                    </div>

                    <Button variant="primary" className="btn-icon flex-shrink-0 ms-2">
                        <TbCircleDashedPlus className="fs-lg"/>
                    </Button>
                    <Button variant="primary" className="btn-icon flex-shrink-0 ms-1">
                        <TbActivityHeartbeat className="fs-lg"/>
                    </Button>
                </div>
            </div>
        </Container>
    )
}

export default Page