"use client"
import Image from 'next/image'

import chatImg from '@/assets/images/chat.png'
import fileManagerImg from '@/assets/images/file-manager.png'
import teamImg from '@/assets/images/team.png'
import CountUp from 'react-countup'
import Link from 'next/link'

type StateType = {
    value: number,
    suffix: string,
    label: string,
}

const Features = () => {
    const stats1: StateType[] = [
        { value: 99.50, suffix: '%', label: 'User satisfaction' },
        { value: 7.4, suffix: 'x', label: 'Monthly user growth' },
        { value: 1200, suffix: '+', label: 'Messages sent per second' }
    ];
    const stats2: StateType[] = [
        { value: 99.50, suffix: '%', label: 'File recovery success rate' },
        { value: 3.2, suffix: 'x', label: 'Faster upload speed' },
        { value: 1500, suffix: '+', label: 'Files organized per minute' }
    ];
    const stats3: StateType[] = [
        { value: 97.50, suffix: '%', label: 'Sync reliability' },
        { value: 4.2, suffix: 'x', label: 'Faster contact search' },
        { value: 250000, suffix: '+', label: 'Contacts managed daily' }
    ];
    return (
        <section className="section-custom bg-light bg-opacity-30 border-top border-light border-bottom" id="features">
            <div className="container">
                <div className="row align-items-center pb-5">
                    <div className="col-lg-6 col-xl-5 py-3">
                        <div className="position-relative">
                            <figure className="position-absolute top-0 start-0 translate-middle mt-5 opacity-25">
                                <svg width={111} height={170} viewBox="0 0 111 170" fill="#1ab394" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M99.2319 7.37436C100.054 7.30936 101.638 15.7474 102.856 26.059C104.147 36.3089 105.01 48.3589 105.287 55.3911C105.778 69.3822 104.459 80.6992 102.753 80.7559C100.986 80.7391 99.5737 69.5262 99.0765 55.6027C98.7941 48.638 98.612 36.5788 98.4807 26.2931C98.3494 16.0074 98.3422 7.43353 99.2319 7.37436Z" />
                                    <path d="M80.3888 75.0118C79.555 75.2119 77.8208 71.6599 75.6665 67.4591C73.5063 63.3259 70.8525 58.6057 69.3802 55.9609C66.4471 50.5361 64.4804 45.7392 65.8687 44.6345C67.1836 43.5915 71.6484 47.0394 74.8842 52.8986C76.5416 55.7636 78.7318 61.1241 79.8822 65.9185C81.0327 70.7128 81.2226 74.8118 80.3888 75.0118Z" />
                                    <path d="M61.7883 89.4615C61.3805 90.2428 54.8078 87.5652 47.1688 83.8428C39.5297 80.1205 30.9035 75.2241 26.0659 72.1522C16.3908 66.0084 9.53733 59.4962 10.5438 58.0863C11.5502 56.6764 19.903 60.8007 29.4489 66.8652C34.2189 69.9313 42.3932 75.3329 49.4043 80.0217C56.4097 84.7779 62.1902 88.7478 61.7883 89.4615Z" />
                                    <path d="M46.1586 113.626C46.0151 114.498 42.6533 114.82 38.7186 114.684C34.7105 114.609 30.1297 114.077 27.4574 113.506C22.1804 112.369 18.3033 109.993 18.7195 108.328C19.1356 106.663 23.5897 106.299 28.7317 107.424C31.2689 107.984 35.6563 109.18 39.43 110.39C43.2037 111.601 46.2962 112.821 46.1586 113.626Z" />
                                    <path d="M52.2364 144.838C52.4365 145.672 46.3447 147.663 39.1256 150.101C31.9065 152.538 23.5601 155.423 18.719 157.114C9.04856 160.36 0.851466 162.305 0.169487 160.749C-0.512493 159.193 6.75837 154.583 16.7107 151.225C21.6868 149.545 30.3976 147.169 38.0635 145.858C45.6002 144.469 52.0363 144.005 52.2364 144.838Z" />
                                </svg>
                            </figure>
                            <Image src={chatImg} className="rounded-3 shadow-lg img-fluid mt-5 z-1 position-relative" alt="saas-img" />
                            <figure className="position-absolute bottom-0 end-0 me-n5 mb-n5 opacity-25">
                                <svg width={120} height={120} xmlns="http://www.w3.org/2000/svg">
                                    <g fill="#1c84c6">
                                        <circle cx={10} cy={10} r={4} />
                                        <circle cx={26} cy={10} r={4} />
                                        <circle cx={42} cy={10} r={4} />
                                        <circle cx={58} cy={10} r={4} />
                                        <circle cx={74} cy={10} r={4} />
                                        <circle cx={90} cy={10} r={4} />
                                        <circle cx={10} cy={26} r={4} />
                                        <circle cx={26} cy={26} r={4} />
                                        <circle cx={42} cy={26} r={4} />
                                        <circle cx={58} cy={26} r={4} />
                                        <circle cx={74} cy={26} r={4} />
                                        <circle cx={90} cy={26} r={4} />
                                        <circle cx={10} cy={42} r={4} />
                                        <circle cx={26} cy={42} r={4} />
                                        <circle cx={42} cy={42} r={4} />
                                        <circle cx={58} cy={42} r={4} />
                                        <circle cx={74} cy={42} r={4} />
                                        <circle cx={90} cy={42} r={4} />
                                        <circle cx={10} cy={58} r={4} />
                                        <circle cx={26} cy={58} r={4} />
                                        <circle cx={42} cy={58} r={4} />
                                        <circle cx={58} cy={58} r={4} />
                                        <circle cx={74} cy={58} r={4} />
                                        <circle cx={90} cy={58} r={4} />
                                        <circle cx={10} cy={74} r={4} />
                                        <circle cx={26} cy={74} r={4} />
                                        <circle cx={42} cy={74} r={4} />
                                        <circle cx={58} cy={74} r={4} />
                                        <circle cx={74} cy={74} r={4} />
                                        <circle cx={90} cy={74} r={4} />
                                        <circle cx={10} cy={90} r={4} />
                                        <circle cx={26} cy={90} r={4} />
                                        <circle cx={42} cy={90} r={4} />
                                        <circle cx={58} cy={90} r={4} />
                                        <circle cx={74} cy={90} r={4} />
                                        <circle cx={90} cy={90} r={4} />
                                    </g>
                                </svg>
                            </figure>
                        </div>
                    </div>
                    <div className="col-lg-5 ms-auto py-3">
                        <h2 className="mb-4 lh-base">Connecting conversations across the world</h2>
                        <p className="mb-2 lead">Fast, secure, and intuitive—our chat platform empowers teams and communities to communicate effortlessly, no matter the distance.</p>
                        <p className="text-muted fs-sm mb-4">Experience seamless messaging with built-in privacy features and unmatched reliability.</p>
                        <Link href="/chat" className="btn btn-primary mb-4">Check Chat App</Link>
                        <div className="d-flex flex-wrap justify-content-between gap-4 mt-4">
                            {stats1.map((state, idx) => (
                                <div key={idx}>
                                    <h3 className="mb-2">
                                        <CountUp end={state.value} decimals={1} duration={2} />
                                        <span className="text-primary">{state.suffix}</span>
                                    </h3>
                                    <p className="text-muted mb-0">{state.label}</p>
                                </div>
                            ))}
                        </div>
                    </div>
                </div>
                <div className="row align-items-center py-5">
                    <div className="col-lg-5 py-5 order-2 order-lg-1">
                        <h2 className="mb-4 lh-base">Manage your files seamlessly from anywhere</h2>
                        <p className="mb-2 lead">A powerful, secure, and intuitive file manager built to simplify how individuals and teams store, share, and organize files.</p>
                        <p className="text-muted fs-sm mb-4">Access files instantly, collaborate in real-time, and enjoy peace of mind with encrypted storage.</p>
                        <Link href="/file-manager" className="btn btn-primary mb-4">Explore File Manager</Link>
                        <div className="d-flex flex-wrap justify-content-between gap-4 mt-4">
                            {stats2.map((state, idx) => (
                                <div key={idx}>
                                    <h3 className="mb-2">
                                        <CountUp end={state.value} decimals={1} duration={2} />
                                        <span className="text-primary">{state.suffix}</span>
                                    </h3>
                                    <p className="text-muted mb-0">{state.label}</p>
                                </div>
                            ))}
                        </div>
                    </div>
                    <div className="col-lg-6 col-xl-5 ms-auto py-5 order-1 order-lg-2">
                        <div className="position-relative">
                            <figure className="position-absolute top-0 start-0 translate-middle mt-5 opacity-25">
                                <svg width={111} height={170} viewBox="0 0 111 170" fill="#1c84c6" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M99.2319 7.37436C100.054 7.30936 101.638 15.7474 102.856 26.059C104.147 36.3089 105.01 48.3589 105.287 55.3911C105.778 69.3822 104.459 80.6992 102.753 80.7559C100.986 80.7391 99.5737 69.5262 99.0765 55.6027C98.7941 48.638 98.612 36.5788 98.4807 26.2931C98.3494 16.0074 98.3422 7.43353 99.2319 7.37436Z" />
                                    <path d="M80.3888 75.0118C79.555 75.2119 77.8208 71.6599 75.6665 67.4591C73.5063 63.3259 70.8525 58.6057 69.3802 55.9609C66.4471 50.5361 64.4804 45.7392 65.8687 44.6345C67.1836 43.5915 71.6484 47.0394 74.8842 52.8986C76.5416 55.7636 78.7318 61.1241 79.8822 65.9185C81.0327 70.7128 81.2226 74.8118 80.3888 75.0118Z" />
                                    <path d="M61.7883 89.4615C61.3805 90.2428 54.8078 87.5652 47.1688 83.8428C39.5297 80.1205 30.9035 75.2241 26.0659 72.1522C16.3908 66.0084 9.53733 59.4962 10.5438 58.0863C11.5502 56.6764 19.903 60.8007 29.4489 66.8652C34.2189 69.9313 42.3932 75.3329 49.4043 80.0217C56.4097 84.7779 62.1902 88.7478 61.7883 89.4615Z" />
                                    <path d="M46.1586 113.626C46.0151 114.498 42.6533 114.82 38.7186 114.684C34.7105 114.609 30.1297 114.077 27.4574 113.506C22.1804 112.369 18.3033 109.993 18.7195 108.328C19.1356 106.663 23.5897 106.299 28.7317 107.424C31.2689 107.984 35.6563 109.18 39.43 110.39C43.2037 111.601 46.2962 112.821 46.1586 113.626Z" />
                                    <path d="M52.2364 144.838C52.4365 145.672 46.3447 147.663 39.1256 150.101C31.9065 152.538 23.5601 155.423 18.719 157.114C9.04856 160.36 0.851466 162.305 0.169487 160.749C-0.512493 159.193 6.75837 154.583 16.7107 151.225C21.6868 149.545 30.3976 147.169 38.0635 145.858C45.6002 144.469 52.0363 144.005 52.2364 144.838Z" />
                                </svg>
                            </figure>
                            <Image src={fileManagerImg} className="rounded-3 shadow-lg img-fluid mt-5 z-1 position-relative" alt="saas-img" />
                            <figure className="position-absolute bottom-0 end-0 me-n5 mb-n5 opacity-25">
                                <svg width={120} height={120} xmlns="http://www.w3.org/2000/svg">
                                    <g fill="#f8ac59">
                                        <circle cx={10} cy={10} r={4} />
                                        <circle cx={26} cy={10} r={4} />
                                        <circle cx={42} cy={10} r={4} />
                                        <circle cx={58} cy={10} r={4} />
                                        <circle cx={74} cy={10} r={4} />
                                        <circle cx={90} cy={10} r={4} />
                                        <circle cx={10} cy={26} r={4} />
                                        <circle cx={26} cy={26} r={4} />
                                        <circle cx={42} cy={26} r={4} />
                                        <circle cx={58} cy={26} r={4} />
                                        <circle cx={74} cy={26} r={4} />
                                        <circle cx={90} cy={26} r={4} />
                                        <circle cx={10} cy={42} r={4} />
                                        <circle cx={26} cy={42} r={4} />
                                        <circle cx={42} cy={42} r={4} />
                                        <circle cx={58} cy={42} r={4} />
                                        <circle cx={74} cy={42} r={4} />
                                        <circle cx={90} cy={42} r={4} />
                                        <circle cx={10} cy={58} r={4} />
                                        <circle cx={26} cy={58} r={4} />
                                        <circle cx={42} cy={58} r={4} />
                                        <circle cx={58} cy={58} r={4} />
                                        <circle cx={74} cy={58} r={4} />
                                        <circle cx={90} cy={58} r={4} />
                                        <circle cx={10} cy={74} r={4} />
                                        <circle cx={26} cy={74} r={4} />
                                        <circle cx={42} cy={74} r={4} />
                                        <circle cx={58} cy={74} r={4} />
                                        <circle cx={74} cy={74} r={4} />
                                        <circle cx={90} cy={74} r={4} />
                                        <circle cx={10} cy={90} r={4} />
                                        <circle cx={26} cy={90} r={4} />
                                        <circle cx={42} cy={90} r={4} />
                                        <circle cx={58} cy={90} r={4} />
                                        <circle cx={74} cy={90} r={4} />
                                        <circle cx={90} cy={90} r={4} />
                                    </g>
                                </svg>
                            </figure>
                        </div>
                    </div>
                </div>
                <div className="row align-items-center py-5">
                    <div className="col-lg-6 col-xl-5 py-3">
                        <div className="position-relative">
                            <figure className="position-absolute top-0 start-0 translate-middle mt-5 opacity-25">
                                <svg width={111} height={170} viewBox="0 0 111 170" fill="#7b70ef" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M99.2319 7.37436C100.054 7.30936 101.638 15.7474 102.856 26.059C104.147 36.3089 105.01 48.3589 105.287 55.3911C105.778 69.3822 104.459 80.6992 102.753 80.7559C100.986 80.7391 99.5737 69.5262 99.0765 55.6027C98.7941 48.638 98.612 36.5788 98.4807 26.2931C98.3494 16.0074 98.3422 7.43353 99.2319 7.37436Z" />
                                    <path d="M80.3888 75.0118C79.555 75.2119 77.8208 71.6599 75.6665 67.4591C73.5063 63.3259 70.8525 58.6057 69.3802 55.9609C66.4471 50.5361 64.4804 45.7392 65.8687 44.6345C67.1836 43.5915 71.6484 47.0394 74.8842 52.8986C76.5416 55.7636 78.7318 61.1241 79.8822 65.9185C81.0327 70.7128 81.2226 74.8118 80.3888 75.0118Z" />
                                    <path d="M61.7883 89.4615C61.3805 90.2428 54.8078 87.5652 47.1688 83.8428C39.5297 80.1205 30.9035 75.2241 26.0659 72.1522C16.3908 66.0084 9.53733 59.4962 10.5438 58.0863C11.5502 56.6764 19.903 60.8007 29.4489 66.8652C34.2189 69.9313 42.3932 75.3329 49.4043 80.0217C56.4097 84.7779 62.1902 88.7478 61.7883 89.4615Z" />
                                    <path d="M46.1586 113.626C46.0151 114.498 42.6533 114.82 38.7186 114.684C34.7105 114.609 30.1297 114.077 27.4574 113.506C22.1804 112.369 18.3033 109.993 18.7195 108.328C19.1356 106.663 23.5897 106.299 28.7317 107.424C31.2689 107.984 35.6563 109.18 39.43 110.39C43.2037 111.601 46.2962 112.821 46.1586 113.626Z" />
                                    <path d="M52.2364 144.838C52.4365 145.672 46.3447 147.663 39.1256 150.101C31.9065 152.538 23.5601 155.423 18.719 157.114C9.04856 160.36 0.851466 162.305 0.169487 160.749C-0.512493 159.193 6.75837 154.583 16.7107 151.225C21.6868 149.545 30.3976 147.169 38.0635 145.858C45.6002 144.469 52.0363 144.005 52.2364 144.838Z" />
                                </svg>
                            </figure>
                            <Image src={teamImg} className="rounded-3 shadow-lg img-fluid mt-5 z-1 position-relative" alt="saas-img" />
                            <figure className="position-absolute bottom-0 end-0 me-n5 mb-n5 opacity-25">
                                <svg width={120} height={120} xmlns="http://www.w3.org/2000/svg">
                                    <g fill="#ed5565">
                                        <circle cx={10} cy={10} r={4} />
                                        <circle cx={26} cy={10} r={4} />
                                        <circle cx={42} cy={10} r={4} />
                                        <circle cx={58} cy={10} r={4} />
                                        <circle cx={74} cy={10} r={4} />
                                        <circle cx={90} cy={10} r={4} />
                                        <circle cx={10} cy={26} r={4} />
                                        <circle cx={26} cy={26} r={4} />
                                        <circle cx={42} cy={26} r={4} />
                                        <circle cx={58} cy={26} r={4} />
                                        <circle cx={74} cy={26} r={4} />
                                        <circle cx={90} cy={26} r={4} />
                                        <circle cx={10} cy={42} r={4} />
                                        <circle cx={26} cy={42} r={4} />
                                        <circle cx={42} cy={42} r={4} />
                                        <circle cx={58} cy={42} r={4} />
                                        <circle cx={74} cy={42} r={4} />
                                        <circle cx={90} cy={42} r={4} />
                                        <circle cx={10} cy={58} r={4} />
                                        <circle cx={26} cy={58} r={4} />
                                        <circle cx={42} cy={58} r={4} />
                                        <circle cx={58} cy={58} r={4} />
                                        <circle cx={74} cy={58} r={4} />
                                        <circle cx={90} cy={58} r={4} />
                                        <circle cx={10} cy={74} r={4} />
                                        <circle cx={26} cy={74} r={4} />
                                        <circle cx={42} cy={74} r={4} />
                                        <circle cx={58} cy={74} r={4} />
                                        <circle cx={74} cy={74} r={4} />
                                        <circle cx={90} cy={74} r={4} />
                                        <circle cx={10} cy={90} r={4} />
                                        <circle cx={26} cy={90} r={4} />
                                        <circle cx={42} cy={90} r={4} />
                                        <circle cx={58} cy={90} r={4} />
                                        <circle cx={74} cy={90} r={4} />
                                        <circle cx={90} cy={90} r={4} />
                                    </g>
                                </svg>
                            </figure>
                        </div>
                    </div>
                    <div className="col-lg-5 ms-auto py-3">
                        <h2 className="mb-4 lh-base">Manage your connections with ease</h2>
                        <p className="mb-2 lead">Our smart contacts app keeps all your relationships organized, accessible, and in sync across devices—at home or on the go.</p>
                        <p className="text-muted fs-sm mb-4">Effortlessly import, categorize, and interact with contacts through a clean, privacy-focused interface.</p>
                        <Link href="/contacts" className="btn btn-primary mb-4">Check Contacts App</Link>
                        <div className="d-flex flex-wrap justify-content-between gap-4 mt-4">
                            {stats3.map((state, idx) => (
                                <div key={idx}>
                                    <h3 className="mb-2">
                                        <CountUp end={state.value} decimals={1} duration={2} />
                                        <span className="text-primary">{state.suffix}</span>
                                    </h3>
                                    <p className="text-muted mb-0">{state.label}</p>
                                </div>
                            ))}
                        </div>
                    </div>
                </div>
            </div>
        </section>

    )
}

export default Features